create definer = root@localhost view study_database.task2 as
select `study_database`.`actions`.`id`          AS `id`,
       `study_database`.`actions`.`action_date` AS `data`,
       `study_database`.`products`.`product`    AS `product`,
       `study_database`.`suppliers`.`supplier`  AS `supplier`,
       `study_database`.`actions`.`qty`         AS `count`,
       `study_database`.`actions`.`price`       AS `price`
from ((`study_database`.`actions` join `study_database`.`products` on ((`study_database`.`actions`.`product_id` =
                                                                        `study_database`.`products`.`id`)))
         join `study_database`.`suppliers`
              on ((`study_database`.`actions`.`supplier_id` = `study_database`.`suppliers`.`id`)))
where ((year(`study_database`.`actions`.`action_date`) = 2016) and
       (month(`study_database`.`actions`.`action_date`) = 1))
order by `study_database`.`actions`.`action_date` desc;


