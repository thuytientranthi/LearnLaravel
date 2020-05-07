# Laravel

Go to laradock
```
cd laradock
```

Copy `env-example` to `.env`
```
cp env.example .env
```

Run this command
```
docker-compose up -d mysql redis workspace apache2
```

Go to workspace
```
docker-compose exec workspace bash
```

Create project
```
composer create-project --presist laravel/laravel {project-name} "5.5.*"
```

Go to host file
```
sudo vim /etc/hosts
```

Map domain `learn-laravel.test` with ip `127.0.0.1` (Add end of file)
```
127.0.0.1       learn-laravel.test
```

Go to `learn-laravel.test` and Enjoy it
