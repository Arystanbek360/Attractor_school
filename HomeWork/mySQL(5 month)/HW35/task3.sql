create table Students
(
    StudentID int auto_increment
        primary key,
    Name      varchar(45) not null
);

create table Topic
(
    TopicID    int auto_increment
        primary key,
    Topic_Name varchar(45) not null
);

create table Lessons
(
    LessonID  int auto_increment
        primary key,
    Topic     int  null,
    StartDate date not null,
    EndDate   date not null,
    constraint lessons_ibfk_1
        foreign key (Topic) references Topic (TopicID)
);

create index Topic
    on Lessons (Topic);

create table class
(
    GroupID   int auto_increment
        primary key,
    GroupName varchar(45) not null
);

create table LessonPlans
(
    LessonPlanID int auto_increment
        primary key,
    Lesson_ID    int null,
    Group_ID     int null,
    constraint lessonplans_ibfk_1
        foreign key (Lesson_ID) references Lessons (LessonID),
    constraint lessonplans_ibfk_2
        foreign key (Group_ID) references class (GroupID)
);

create table Attendance
(
    AttendanceID     int auto_increment
        primary key,
    LessonPlanID     int        null,
    StudentID        int        null,
    AttendanceStatus tinyint(1) not null,
    constraint attendance_ibfk_1
        foreign key (LessonPlanID) references LessonPlans (LessonPlanID),
    constraint attendance_ibfk_2
        foreign key (StudentID) references Students (StudentID)
);

create index LessonPlanID
    on Attendance (LessonPlanID);

create index StudentID
    on Attendance (StudentID);

create index Group_ID
    on LessonPlans (Group_ID);

create index Lesson_ID
    on LessonPlans (Lesson_ID);


