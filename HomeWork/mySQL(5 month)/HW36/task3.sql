create definer = root@localhost view study_database.task3 as
select distinct `study_database`.`products`.`product` AS `product`
from (`study_database`.`products`
         join `study_database`.`actions`
              on ((`study_database`.`actions`.`product_id` = `study_database`.`products`.`id`)))
where (year(`study_database`.`actions`.`action_date`) = 2017);


