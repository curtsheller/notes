2014_01_07_073615_create_tagged_table
2014_01_07_073615_create_tags_table
2016_06_29_073615_create_tag_groups_table
2016_06_29_073615_update_tags_table 
2018_01_01_000000_create_action_events_table
2019_05_03_000001_add_spark_columns_to_users_table
2019_05_03_000002_create_subscriptions_table
2019_05_03_000003_create_subscription_items_table
2019_05_10_000000_add_fields_to_action_events_table
2019_06_03_000003_create_receipts_table
2019_06_03_000003_create_tax_rates_table
2020_03_13_083515_add_description_to_tags_table
2021_08_25_193039_create_nova_notifications_table
2022_01_05_114000_create_workshop_attendee_table
2022_04_26_000000_add_fields_to_nova_notifications_table 

/home/curtsheller/Sites/learningukulele/database/migrations/2022_01_05_114000_create_workshop_attendee_table.php

2022_01_03_123000_create_workshops_table                 | 1     |
2022_01_03_125100_create_workshop_relations_table        | 1     |


        Schema::dropIfExists('workshop_attendee');

        Schema::create('workshop_attendee', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('workshop_id');
            $table->unsignedInteger('user_id');
        });

----
  2022_01_03_123000_create_workshops_table.php

        Schema::dropIfExists('workshops');

        Schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->string('code', 32);
            $table->string('title', 128);
            $table->string('sub_title', 128);
            $table->string('slug', 128);

            $table->boolean('available', 1);
            $table->boolean('private', 1);
            $table->boolean('premium', 1);

            $table->string('category', 128);
            $table->string('instrument', 128);
            $table->string('status', 15);

            $table->text('description_mini');
            $table->text('description');

            $table->unsignedInteger('price')->default(0);

            $table->string('has_video', 1)->default(0);
            $table->string('has_pdf', 1)->default(0);
            $table->string('A4', 1)->default(0);

            $table->string('pdf_name', 128);
            $table->unsignedInteger('pdf_price')->default(0);

            $table->date('published');
            $table->date('updated_date');

            $table->timestamps();
        });

----

2022_01_03_125100_create_workshop_relations_table.php

        Schema::dropIfExists('workshop_asset');
        Schema::dropIfExists('workshop_book');
        Schema::dropIfExists('workshop_lesson');
        Schema::dropIfExists('workshop_series');
        Schema::dropIfExists('workshop_song');
        Schema::dropIfExists('workshop_video');
        Schema::dropIfExists('workshop_workshop');

        Schema::dropIfExists('workshop_author');
        Schema::dropIfExists('workshop_publisher');
        Schema::dropIfExists('workshop_comment');
        Schema::dropIfExists('workshop_instrument');

        Schema::create('workshop_asset', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('workshop_id');
            $table->unsignedInteger('asset_id');
        });
        Schema::create('workshop_book', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('workshop_id');
            $table->unsignedInteger('book_id');
        });
        Schema::create('workshop_lesson', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('workshop_id');
            $table->unsignedInteger('lesson_id');
        });
        Schema::create('workshop_series', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('workshop_id');
            $table->unsignedInteger('series_id');
        });
        Schema::create('workshop_song', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('workshop_id');
            $table->unsignedInteger('song_id');
        });
        Schema::create('workshop_video', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('workshop_id');
            $table->unsignedInteger('video_id');
        });
        Schema::create('workshop_workshop', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('workshop_id');
            $table->unsignedInteger('related_workshop_id');
        });


        Schema::create('workshop_comment', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('workshop_id');
            $table->unsignedInteger('comment_id');
        });
        Schema::create('workshop_instrument', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('workshop_id');
            $table->unsignedInteger('instrument_id');
        });
        Schema::create('workshop_author', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('workshop_id');
            $table->unsignedInteger('author_id');
        });
        Schema::create('workshop_publisher', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('workshop_id');
            $table->unsignedInteger('publisher_id');
        });
