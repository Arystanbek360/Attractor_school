create table Types
(
    id        int         not null
        primary key,
    type_name varchar(45) not null
);

create table categories
(
    id             int not null
        primary key,
    genre_name     int null,
    sub_categories int null
);

create table genres
(
    id         int         not null
        primary key,
    genre_name varchar(45) not null
);

create table work_categories
(
    id          int not null
        primary key,
    work_id     int null,
    category_id int null
);

create table works
(
    id      int         not null
        primary key,
    title   varchar(45) not null,
    type_id int         null
);

create table writers
(
    id   int         not null
        primary key,
    name varchar(45) not null
);

create table writers_works
(
    id        int not null
        primary key,
    writer_id int null,
    work_id   int null
);


