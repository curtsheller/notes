# Troubleshooting

There are articles on [System76 Support pages for troubleshooting &#128279;](https://support.system76.com/#troubleshoot).&ldquo;

## Hardware Troubleshooting

### Freezing Systems
Freezing behaviors tend to occur when a piece of hardware is defective.

#### Run Memory Test

```
free -h
```

_Response:_
```
               total        used        free      shared  buff/cache   available
Mem:            31Gi       7.7Gi       1.3Gi       453Mi        22Gi        22Gi
Swap:             0B          0B          0B
```

```
sudo apt update
sudo apt install memtester
sudo memtester 26M 3
```

_Response:_
```

```
#### Check Hard Drive for Errors
