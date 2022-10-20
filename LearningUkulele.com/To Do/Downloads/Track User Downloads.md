# Track User Downloads

Priority: Med. Might not really be needed other than like to know what books are popular.

Can use the `Assignables` classes, etc.

## Tables

### TABLE: **downloadable_downloads**

Track the *downloads* (attempts, actual) that a user does.

- id,
- downloadable_id,
- downlable_type,
- user_id,
- created_at,
- updated_at

### TABLE: **downloadable_downloads_count**
- id,
- downloadable_id,
- downlable_type,
- count


## Models, Classes, Traits, etc...:
----
- trait **DownloadableControllerTrait**
- trait **DownloadableTrait**
- class **Download** extends Eloquent
    - This `Download` class is being used already. It is using the `assets` table which has ALL assets (not books or lessons main assets(s)). It is being used by the` Lesson`, `Song`, and `Book` models to track their main assets and has a `belongsToMany`  method for a models main asset. The tables are: `book_main_download`, `lesson_main_download`, and `song_main_download` as these assets can have multiple assets as part of it - but only the main downloads - not any related assets as there are handled seperate. Maybe change table names to `book_main_asset`, `lesson_main_asset`, and `song_main_asset`.
	- Only the Song model is using the `downloads`.
- class **DownloadCounter** extends Eloquent
