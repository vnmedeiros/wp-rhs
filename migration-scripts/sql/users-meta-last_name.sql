
INSERT IGNORE INTO {{usermeta}}
(
    user_id,
    meta_key,
    meta_value
)

SELECT DISTINCT
    
    u.uid as `user_id`,
    'last_name' as `meta_key`,
    REPLACE(u.name, SUBSTRING_INDEX(u.name,' ',1),'') as `meta_value`
    FROM {{drupaldb}}.users u
    
WHERE u.uid > 1;
