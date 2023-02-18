create definer = root@localhost view study_database.hw37task2 as
select `c`.`category` AS `category`, `s`.`supplier` AS `supplier`, sum((`a`.`price` * `a`.`qty`)) AS `total`
from (((`study_database`.`actions` `a` join `study_database`.`products` `p` on ((`a`.`product_id` = `p`.`id`))) join `study_database`.`suppliers` `s` on ((`a`.`supplier_id` = `s`.`id`)))
         join `study_database`.`categories` `c` on ((`p`.`category_id` = `c`.`id`)))
where (year(`a`.`action_date`) = 2016)
group by `c`.`category`, `s`.`supplier`
order by `s`.`supplier`;


