create definer = root@localhost view study_database.task1 as
select `study_database`.`products`.`product`                                   AS `product`,
       cast(`study_database`.`actions`.`action_date` as date)                  AS `delivery_date`,
       `study_database`.`actions`.`qty`                                        AS `count`,
       `study_database`.`actions`.`price`                                      AS `price`,
       (`study_database`.`actions`.`price` * `study_database`.`actions`.`qty`) AS `total_price`
from ((`study_database`.`actions` join `study_database`.`products` on ((`study_database`.`actions`.`product_id` =
                                                                        `study_database`.`products`.`id`)))
         join `study_database`.`categories`
              on ((`study_database`.`products`.`category_id` = `study_database`.`categories`.`id`)))
where ((`study_database`.`categories`.`category` = 'Monitors') and
       (year(`study_database`.`actions`.`action_date`) < 2017))
order by `study_database`.`actions`.`qty` desc
limit 5;


