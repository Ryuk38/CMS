pipeline {
    agent any
    environment {
        DOCKER_HOST = 'tcp://host.docker.internal:2375' // Point to Docker Desktop daemon
    }
    stages {
        stage('Clone') {
            steps {
                git branch: 'main', url: 'https://github.com/Ryuk38/cms-test.git'
            }
        }

        stage('Build Image') {
            steps {
                bat 'docker build -t my-cms-app .' // Use bat for Windows compatibility
            }
        }

        stage('Run Container') {
            steps {
                bat 'docker-compose -f docker-compose.cms.yml up -d --build' // Use bat for docker-compose
            }
        }

        stage('Test') {
            steps {
                bat 'curl -s -o NUL -w "%%{http_code}" http://localhost:8085 | findstr 200' // Windows-compatible curl
            }
        }
    }
}
