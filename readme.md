To set up run 
```
composer install
```

To create the database go to terminal and run add --dump-sql to view sql output
```
php vendor/bin/doctrine orm:schema-tool:create
```

To generate mappings 
```
php vendor/bin/doctrine orm:convert-mapping --from-database annotation .
```

To generate entities
```
php vendor/bin/doctrine orm:generate-entities ./src
```

When database entities updated:
```
php vendor/bin/doctrine orm:schema-tool:update --dump-sql
```