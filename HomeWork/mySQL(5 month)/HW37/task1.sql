create definer = root@localhost view study_database.hw37task1 as
select `b`.`brand` AS `brand`, sum((`a`.`price` * `a`.`qty`)) AS `sum(a.price * a.qty)`
from ((`study_database`.`actions` `a` join `study_database`.`products` `p` on ((`a`.`product_id` = `p`.`id`)))
         left join `study_database`.`brands` `b` on ((`p`.`brand_id` = `b`.`id`)))
group by `b`.`brand`;


