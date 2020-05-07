# Laravel

Go to laradock
```
cd laradock
```

Copy `env.example` to `.env`
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