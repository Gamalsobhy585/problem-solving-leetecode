select teacher_id , COUNT(DISTINCT subject_id) as COUNT
FROM Teacher 
GROUP BY teacher_id