-- selecting student infos from "members" plus their study field name through "students"
    SELECT m.id,m.first_name,m.last_name,m.country,m.city, m.location_id, s.study_field_id, sf.name
    FROM members m
    INNER JOIN students s
    INNER JOIN studyfields sf
    ON m.id = s.member_id AND s.study_field_id = sf.id
    WHERE m.role = "student"
    ---------------
    -- not good idea but it is possibgle to update using join!!
    -- Update members table
        UPDATE members m
        INNER JOIN students s
        ON m.id = s.member_id
        SET m.city = 'NewCity', m.country = 'NewCountry'
        WHERE m.role = "student" AND s.study_field_id = 1; -- replace 1 with the desired study_field_id

        -- Update students table
        UPDATE students s
        INNER JOIN members m
        ON m.id = s.member_id
        INNER JOIN studyfields sf
        ON s.study_field_id = sf.id
        SET s.study_field_id = 2 -- replace 2 with the desired new study_field_id
        WHERE m.role = "student" AND sf.name = 'OldStudyFieldName'; -- replace 'OldStudyFieldName' with the desired old study field name



