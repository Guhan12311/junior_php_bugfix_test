# Junior PHP Bug Fix Assessment

## Candidate
**Name:** Guhan A

## Project Setup

1. Copy the project folder to:
   C:\xampp\htdocs\

2. Start Apache and MySQL using XAMPP.

3. Import the `junior_php_test.sql` file into phpMyAdmin.

4. Open the project in the browser:
   http://localhost/junior_php_bugfix_test/

---

## Work Completed

### Task 1 – Registration SQL Error
- Identified the SQL error during registration.
- Found that the `password` column was included twice in the INSERT query.
- Removed the duplicate column and updated the execute parameters.
- Tested the registration successfully.

### Task 2 – Admin Registration Issue
- Checked why new registrations were not appearing in the admin page.
- Found that the data was being inserted into the `customers` table, while the admin page was reading from the `registrations` table.
- Added the required registration entry so the admin page displays the submitted data correctly.
- Verified the result through the admin page.

### Task 3 – Payment Status Update
- Reviewed the payment update logic.
- Found that the code was saving the status as `paid`, while the database accepts only `pending`, `success`, or `failed`.
- Updated the logic to store the correct status value.
- Tested the payment update successfully.

### Task 4 – KYC Upload
- Found that the upload path was pointing to an invalid folder.
- Created the correct upload folder and updated the upload path.
- Stored the correct file path in the database.
- Verified that the uploaded file can be viewed from the output page.

### Task 5 – Dashboard Review
- Reviewed the dashboard query.
- Verified that only the required columns are selected.
- Confirmed that joins and LIMIT are used appropriately for better performance.

---

## Testing

The application was tested after completing each task.

Verified:
- Registration
- Admin Registration List
- Payment Status Update
- KYC File Upload
- Dashboard Output

All tasks were tested successfully.