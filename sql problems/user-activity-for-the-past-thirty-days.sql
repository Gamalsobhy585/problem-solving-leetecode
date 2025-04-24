  select activity_date as day 
  , count(distinct user_id) as active_users 
  From Activity 
  group by  activity_date
  having  activity_date BETWEEN DATE('2019-07-27') - INTERVAL 29 DAY AND DATE('2019-07-27')