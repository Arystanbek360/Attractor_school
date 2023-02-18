create definer = root@localhost view study_database.hw37task3 as
select `c`.`category`                                    AS `category`,
       year(`a`.`action_date`)                           AS `date`,
       min(`a`.`price`)                                  AS `min`,
       max(`a`.`price`)                                  AS `max`,
       (sum((`a`.`price` * `a`.`qty`)) / sum(`a`.`qty`)) AS `avg_total`
from ((`study_database`.`actions` `a` join `study_database`.`products` `p` on ((`a`.`product_id` = `p`.`id`)))
         join `study_database`.`categories` `c` on ((`p`.`category_id` = `c`.`id`)))
group by `c`.`category`, `date`
order by `date`;


