Junior PHP Bug Fix Test Project

Setup:
1. Copy folder junior_php_bugfix_test into:
   C:/xampp/htdocs/

2. Start Apache and MySQL from XAMPP.

3. Open phpMyAdmin:
   http://localhost/phpmyadmin

4. Import:
   junior_php_test.sql

5. Open browser:
   http://localhost/junior_php_bugfix_test/

Files:
- index.php = Main task menu
- db.php = Database connection
- task1_register.php = SQL duplicate column error test
- task2_register.php = Registration/admin mismatch test
- task3_payment.php = Payment status test
- task4_kyc.php = KYC upload test
- task5_dashboard.php = Dashboard SQL optimization output

Use:
Give junior developer broken files first:
- task1_broken_save.php
- task2_broken_save.php
- task3_broken_update.php
- task4_broken_upload.php

Then compare with fixed files.
