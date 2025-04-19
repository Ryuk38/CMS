pipeline {
    agent any

    stages {
        stage('Clone') {
            steps {
                git 'https://github.com/Ryuk38/cms-test.git' // change this!
            }
        }

        stage('Build Image') {
            steps {
                sh 'docker build -t my-cms-app .'
            }
        }

        stage('Run Container') {
            steps {
                sh 'docker-compose -f docker-compose.cms.yml up -d --build'
            }
        }

        stage('Test') {
            steps {
                sh 'curl -s -o /dev/null -w "%{http_code}" http://localhost:8085 | grep 200'
            }
        }
    }
}
