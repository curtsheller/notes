# MeiliSearch

- [**Setup and installation** &#128279;](https://www.meilisearch.com/docs/learn/self_hosted/getting_started_with_self_hosted_meilisearch)
    - [**Installing older versions of Meilisearch** &#128279;](https://www.meilisearch.com/docs/learn/self_hosted/install_meilisearch_locally#installing-older-versions-of-meilisearch)

```
# Install &amp; Launch Meilisearch

## Local

### apt
```sh
    # Add Meilisearch package
    echo "deb [trusted=yes] https://apt.fury.io/meilisearch/ /" | sudo tee /etc/apt/sources.list.d/fury.list

    # Update APT and install Meilisearch
    sudo apt update && sudo apt install meilisearch

    # Launch Meilisearch
    meilisearch
```


### curl
```sh
    # Install Meilisearch latest version
    curl -L https://install.meilisearch.com | sh

    # Launch Meilisearch
    ./meilisearch --master-key="mele1-pono-lani-meilisearch-v1"
```

### INstalling Older Versions
```sh
    # Replace {meilisearch_version} and {meilisearch_os} with the specific version and OS you want to download
    # For example, if you want to download v1.0 on macOS,
    # replace {meilisearch_version} and {meilisearch_os} with v1.0 and meilisearch-macos-amd64 respectively
    curl -OL https://github.com/meilisearch/meilisearch/releases/download/v1.1.0/meilisearch-linux-amd64

    # Rename binary to meilisearch. Replace {meilisearch_os} with the name of the downloaded binary
    mv meilisearch-linux-amd64 meilisearch

    # Give the binary execute permission
    chmod +x meilisearch

    # Launch Meilisearch (NOTE: delete any previous 'data.ms' database.)
    ./meilisearch --master-key="mele1-pono-lani-meilisearch-v1"
```
## Uninstall
To delete all local versions of Meilisearch on Linux, you need to remove the binary, configuration files, data directory, and any associated systemd services.

````sh
    # Not using 'systemctl' with local Meilisearch instance
    sudo systemctl stop meilisearch         # Stop Meilisearch (if running)
    sudo systemctl disable meilisearch

    pkill meilisearch                       # if running
    sudo rm -f /usr/bin/meilisearch         # If you installed it manually (curl)
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
    which meilisearch               # Should return nothing
    systemctl status meilisearch    # Should show "Unit meilisearch.service could not be found."
    ls /var/lib/meilisearch         # Should not exist

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
