Install Xampp
Add these files to /htdocs/ciapp folder (create if doesn't exist)
Add a database to mySQL (name 'ciapp' or change config/database file)
Add a table with 5 fields:
  -id: autoincrement int
  -title: varchar
  -slug: varchar
  -body: text
  -created: timestamp / default: current_timestamp