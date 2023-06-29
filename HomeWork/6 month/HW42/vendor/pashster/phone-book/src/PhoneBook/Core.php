<?php


namespace PhoneBook;


class Core
{
    /**
     * @var IStorage
     */
    private IStorage $storage;

    public function __construct(IStorage $storage)
    {
        $this->storage = $storage;
    }

    public function proceedFormData()
    {
        $contacts = [];
        if (!isset($_REQUEST["contact"])) {
            return;
        }

        foreach ($_REQUEST["contact"] as $key => $contact_array) {
            if (!empty($contact_array)) {
                $contacts[] = $this->storage->getNewContactInstance($contact_array);
            }
        }
        $this->storage->storeContacts($contacts);
    }

    public function display(IView $view)
    {
        $view->display(
            array_merge(
                $this->storage->readContacts(),
                [$this->storage->getEmptyContactInstance()]
            )
        );
    }
}