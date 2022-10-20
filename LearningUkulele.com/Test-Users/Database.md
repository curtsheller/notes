# Database

## Tables with `user_id`
These are all the tables that have a `user_id` field that need to be cleared when a user is deleted.

- assignable_assignments
- assignments
- completable_completes
- completed_lesson
- completed_song (This should be used anymore. Make sure noone is accessing it)
- favoritable_favorites
- favorite_book
- favorite_lesson
- favorite_song
- permission_user
- subscriptions

# Roles and Permissions
## Laravel-permission
Associate users with roles and permissions

- `"spatie/laravel-permission": "^4.0"` * [Docs](https://spatie.be/docs/laravel-permission/v4/introduction) * [Github](https://github.com/spatie/laravel-permission)

Using spatie Roles & Permissions for LearningUkulele.com `curt_csp` and clones.

### Table Names
- roles
- permissions
- model_has_permissions
- model_has_roles
- role_has_permissions

### These are not being used

- <strike>permission_role</strike> - **Deleted 2021-04-09**
- <strike>permission_user</strike> - **Deleted 2021-04-09**
- <strike>role_user</strike> - **Deleted 2021-04-09**

# Check If These Tables Still Being Used

- **comments** - **KEEP**, theses as until I can move them to flat files on the site.
- <strike>channels</strike> - **Deleted 2021-04-09**
- <strike>downloads</strike> - **Deleted 2021-04-09**
- <strike>likable_likes</strike>  - **Deleted 2021-04-09**, (Might have been replaces with `favorite`)
- status

- ALL the `student_*` tables - Deleted 2021-04-09. This was a thought of serpeating student and users. Used roles and permissions as a better solution to identifying students. - **Deleted 2021-04-09**

# Models
Check on these Model are needed.

- Download
- <strike>StudentCalendar</strike> - Deleted 2021-04-09
- <strike>StudentLesson</strike> - Deleted 2021-04-09
- <strike>LoginLevel</strike> - Deleted 2021-04-09

- **TopSite** - This might not be needed anymore as the 'Top Site' part of teh site is not static and archival. Just keeping it as there are still site out there that link and drive traffic to LearningUkulele.com