# MeiliSearch

- [**Setup and installation** &#128279;](https://docs.meilisearch.com/learn/getting_started/quick_start.html)

```
# Install &amp; Launch Meilisearch

## Local

# Install Meilisearch
```sh
    # Add Meilisearch package
    # NOT WORKING on Thelio
    #
    #   Using `curl`
    #

    curl -L https://install.meilisearch.com | sh

    # Launch Meilisearch
    ./meilisearch --master-key="mele1-pono-lani-meilisearch-v1"
```

## Uninstall
To delete all local versions of Meilisearch on Linux, you need to remove the binary, configuration files, data directory, and any associated systemd services.

````sh
    sudo systemctl stop meilisearch         # Stop Meilisearch (if running)
    sudo systemctl disable meilisearch

    pkill meilisearch                       # if running
    sudo rm -f /usr/local/bin/meilisearch   # If you installed it manually (curl)

    # if used a package manager (debian/ubuntu)
    sudo apt remove --purge meilisearch -y      # Debian/Ubuntu

    # Delete Meilisearch Data Directory
    sudo rm -rf /var/lib/meilisearch
    rm -rf ~/.meili

    # Remove Systemd Service (if applicable)
    sudo rm -f /etc/systemd/system/meilisearch.service
    sudo systemctl daemon-reload

    # Delete Configuration Files (if any)
    sudo rm -rf /etc/meilisearch

    # Verify Removal
    which meilisearch   # Should return nothing
    systemctl status meilisearch  # Should show "not found"
    ls /var/lib/meilisearch  # Should not exist

````

## Updating

 For local and production you can safely delete current meilisearch version without a dump and simply install the latest version of Meilisearch required.

 ```
# Local
_see above_

 # Production Cloud
 Digital is a few version below the latest Meilisearch is using the marketplace version. GOing by hand to get the latest.

```
# ssh in
ssh root@167.99.127.84 -i ~/.ssh/id_rsa
meilisearch-set
```


----
****Curt Sheller Publications**/**Funky Frets • **CSP**: Pottstown, PA 19464 USA • [curt@curtsheller.com](mailto:curt@curtsheller.com) [UPDATED: **2025-02-17**]
