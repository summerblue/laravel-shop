#!/bin/bash

# 导入 .env  环境变量
source ./.env
# 要备份的表
tables="admin_menu admin_permissions admin_role_menu admin_role_permissions admin_role_users admin_roles admin_user_permissions admin_users"
# 执行备份
mysqldump --host="${DB_HOST}" --port=${DB_PORT} --user="${DB_USERNAME}" --password="${DB_PASSWORD}" -t ${DB_DATABASE} ${tables} > database/admin.sql
