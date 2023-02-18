create table Departments
(
    Department_ID   int auto_increment
        primary key,
    Department_Name varchar(45) null
);

create table Employees
(
    Employee_ID   int auto_increment
        primary key,
    Employee_Name varchar(45) null,
    Manager_ID    int         null,
    constraint employees_ibfk_1
        foreign key (Manager_ID) references Employees (Employee_ID)
);

create table Employee_Departments
(
    Employee_Department_ID int auto_increment
        primary key,
    Employee_ID            int  null,
    Department_ID          int  null,
    Start_Date             date null,
    End_Date               date null,
    constraint employee_departments_ibfk_1
        foreign key (Employee_ID) references Employees (Employee_ID),
    constraint employee_departments_ibfk_2
        foreign key (Department_ID) references Departments (Department_ID)
);

create index Department_ID
    on Employee_Departments (Department_ID);

create index Employee_ID
    on Employee_Departments (Employee_ID);

create index Manager_ID
    on Employees (Manager_ID);

create table Position
(
    Position_ID   int auto_increment
        primary key,
    Position_Name varchar(45) null
);

create table Employee_Positions
(
    Employee_Position_ID int auto_increment
        primary key,
    Employee_ID          int  null,
    Position_ID          int  null,
    Start_Date           date null,
    End_Date             date null,
    constraint employee_positions_ibfk_1
        foreign key (Employee_ID) references Employees (Employee_ID),
    constraint employee_positions_ibfk_2
        foreign key (Position_ID) references Position (Position_ID)
);

create index Employee_ID
    on Employee_Positions (Employee_ID);

create index Position_ID
    on Employee_Positions (Position_ID);

create table Salarys
(
    Salary_ID     int auto_increment
        primary key,
    Employee_ID   int  null,
    Salary_Amount int  null,
    Salary_Date   date null,
    constraint salarys_ibfk_1
        foreign key (Employee_ID) references Employees (Employee_ID)
);

create index Employee_ID
    on Salarys (Employee_ID);


