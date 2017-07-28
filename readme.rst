************
Config Steps
************

-  Install Xampp_
-  Add these files to /htdocs/ciapp folder (create if doesn't exist)_
-  Add a database to mySQL (name 'ciapp' or change config/database file)_
-  Add a `posts` table with 7 fields:_
-  -  id: autoincrement int_
-  -  category_id: autoincrement int_
-  -  title: varchar_
-  -  slug: varchar_
-  -  body: text_
-  -  created: timestamp / default: current_timestamp_
-  -  post_image: varchar_
-  Add a `categories` table with 2 fields: 
-  -  id: autoincrement int_
-  -  name: varchar_

Make sure that the xampp instalation doesn't send you to dashboard (checkout index.php)
