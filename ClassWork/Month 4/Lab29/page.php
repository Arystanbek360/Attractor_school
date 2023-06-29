<?php
require_once('records.php');

interface IRecord
{
    /** @param array $recordData */
    public function __construct(array $recordData);

    /** @return string */
    public function getBody(): string;

    /** @return string */
    public function toHtml(): string;

    /**
     * @param string $search
     * @return bool
     */
    public function contains(string $search): bool;
}

abstract class AbstractRecord implements IRecord
{
    /** @var array $recordData */
    public array $recordData = [];

    /** @param array $recordData */
    public function __construct(array $recordData)
    {
        $this->recordData = $recordData;
    }

    /** @return string */
    public function getBody(): string
    {
        $str = "";
        foreach ($this->recordData as $key => $data) {
            if ($key == "body") {
                return $data;
            }
        }
        return $str;
    }

    /** @return string */
    public abstract function toHtml(): string;

    /**
     * @param string $search
     * @return bool
     */
    public function contains(string $search): bool
    {
        $words = explode(" ", strtolower($this->getBody()));
        foreach ($words as $word) {
            if ($word == $search) {
                return true;
            }
        }
        return false;
    }
}

class Article extends AbstractRecord
{
    /** @return string */
    public function toHtml(): string
    {
        return '<div class="article"><h3>Статья: ' . $this->getTitle() . '</h3>
        <div>Автор: ' . $this->getAuthor() . '</div>
        <p>' . $this->getBody() . '</p></div>';
    }

    /** @return string */
    public function getTitle(): string
    {
        foreach ($this->recordData as $key => $data) {
            if ($key == "title") {
                $str = $data;
            }
        }
        return $str;
    }

    /** @return string */
    public function getAuthor(): string
    {
        foreach ($this->recordData as $key => $data) {
            if ($key == "author") {
                $str = $data;
            }
        }
        return $str;
    }

    /**
     * @param string $search
     * @return bool
     */
    public function contains(string $search): bool
    {
        $words = explode(" ", strtolower($this->getTitle()));
        foreach ($words as $word) {
            if ($word == $search) {
                return true;
            }
        }
        $authors = explode(" ", strtolower($this->getTitle()));
        foreach ($authors as $author) {
            if ($author == $search) {
                return true;
            }
        }
        return parent::contains($search);
    }
}

class News extends AbstractRecord
{
    /** @return string */
    public function getDate(): string
    {
        foreach ($this->recordData as $key => $data) {
            if ($key == "date") {
                $str = $data;
            }
        }
        return $str;
    }

    /** @return string */
    public function toHtml(): string
    {
        return '<div class="news"><h3>Новость</h3>
       <div>Дата: ' . $this->getDate() . '</div>
       <p> ' . $this->getBody() . ' </p>
</div>';
    }
}

class Discount extends AbstractRecord
{
    /** @return string */
    public function getPrice(): string
    {
        foreach ($this->recordData as $key => $data) {
            if ($key == "price") {
                $str = $data;
            }
        }
        return $str;
    }

    /** @return string */
    public function getDiscount(): string
    {
        foreach ($this->recordData as $key => $data) {
            if ($key == "discount") {
                $str = $data;
            }
        }
        return $str;
    }

    /** @return string */
    public function toHtml(): string
    {
        return '<div class="discount">
<h3>Скидка</h3>
<p>' . $this->getBody() . '</p>
<div>Старая цена: ' . $this->getPrice() . '</div>
<div>Скидка: ' . $this->getDiscount() . '</div>
</div>';
    }

    /**
     * @param string $search
     * @return bool
     */
    public function contains(string $search): bool
    {
        $discount = strtolower($this->getDiscount());
        if ($discount == $search) {
            return true;
        }
        return parent::contains($search);
    }
}

class FrontPage
{
    /** @var IRecord[] $records */
    public array $records = [];
    /** @var string $title */
    public string $title;

    /** @param string $title */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /** @return void */
    public function collectData(): void
    {
        $this->records = array_map(
            function (array $recordData): IRecord {
                switch ($recordData['type']) {
                    case Types::ARTICLE:
                        return new Article($recordData);
                    case Types::NEWS:
                        return new News($recordData);
                    default:
                        return new Discount($recordData);
                }
            },
            DB::getRecords());
    }

    /** @return string */
    public function toHtml(): string
    {
        $template = file_get_contents('pageTemplate.html');
        $recordsHtml = '';

        $search = strtolower(trim($_GET['search'] ?? "")) ?: null;

        array_walk(
            $this->records,
            /**@param IRecord $record */
            function ($record) use (&$recordsHtml, $search): void {
                if ($search != null) {
                    if ($record->contains($search) == true) {
                        $recordsHtml .= '<div class="record">' . $record->toHtml() . '</div>';
                    }
                } else {
                    $recordsHtml .= '<div class="record">' . $record->toHtml() . '</div>';
                }
            }
        );

        return str_ireplace(
            ["<!-- {#title#} -->", "<!-- {#records#} -->"],
            [$this->title, $recordsHtml],
            $template
        );
    }
}
