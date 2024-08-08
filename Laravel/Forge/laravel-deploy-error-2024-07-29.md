Getting this error.
```
Mon Jul 29 16:24:14 UTC 2024
From github.com:curtsheller/learningukulele
 * branch              main       -> FETCH_HEAD
Auto-merging resources/views/newsletter/subscribe.blade.php
CONFLICT (content): Merge conflict in resources/views/newsletter/subscribe.blade.php
Automatic merge failed; fix conflicts and then commit the result.
```

Started when I believe git screwed something up on forge when the file above "resources/views/newsletter/subscribe.blade.php" showed >>>>>head... comments on the page. Didn't get that locally - Only live (https://learningukulele.com/newsletter/subscribe).

Followed the steps in "Possible Solution Found" and "Reset Git State" to no avail. Keep getting this error and can't deploy (Server ID: 790498, Site ID: 2354296).

Did not change any files on the server. Until, the above solutions didn't work and tried this:
```
git status

Your branch and 'origin/main' have diverged,
and have 98 and 12 different commits each, respectively.
  (use "git pull" to merge the remote branch into yours)

  # Then "git pull"
  # Same result

  Auto-merging resources/views/newsletter/subscribe.blade.php
CONFLICT (content): Merge conflict in resources/views/newsletter/subscribe.blade.php
Automatic merge failed; fix conflicts and then commit the result.

```
Vicious cycle and can't deploy.

Need help and have not idea what to do.
