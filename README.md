# Hello Docker LAMP

Docker Compose that setups a
[LAMP Stack](https://en.wikipedia.org/wiki/LAMP_(software_bundle)).

## Docker Compose [PKB](https://en.wikipedia.org/wiki/Personal_knowledge_base)

### Restart

Specifies a restart policy:

- `no`: Default value. The container won't be restarted.
- `always`: The service will be restarted every time it is stopped, even if you
  stops it.
- `unless-stopped`: Same as `always` but it will remain stopped if you stops it.
- `on-failure[:times]`: The container will be restarted if it fails. Optionally
  you can specify how many attempts until be considered a failure service.

```yml
restart:
  - on-failure:5
```

### Ports

Binds specific posts between real host and docker.

```yml
ports:
  - <host-port>:<docker-port>
```

### Volumes

Links a folder from working dir to the service target folder. The working dir
folder will be create if doesn't exists.

```yml
volumes:
  - <working-dir-folder>:<target-dir>
```

### Network

Allow isolated communication between containers. Each container of the same
network can communicate with others, however, they cant communicate with
containers of other networks.

```yml
services:
  service1:
    network:
    - <network-name-01>

  service2:
    network:
    - <network-name-02>

  service3:
    network:
    - <network-name-01>

  service4:
    network:
    - <network-name-02>

networks:
  network-name-01:
    driver: bridge

  network-name-02:
    driver: bridge
```

## Bugs or suggestions

If you found a bug or have a suggestion please don't hesitate to contact me or
open an
[issue on GitHub](https://github.com/pabcrudel/hello-docker-lamp/issues).
