pipeline {
    agent any
    environment {
        DOCKER_HOST = 'tcp://host.docker.internal:2375' // Connect to Docker Desktop daemon
    }
    stages {
        stage('Clone') {
            steps {
                git branch: 'main', url: 'https://github.com/Ryuk38/cms-test.git'
            }
        }

        stage('Build Image') {
            steps {
                sh 'docker build -t my-cms-app .'
            }
        }

        stage('Run Container') {
            steps {
                sh 'docker-compose -f docker-compose.yml up -d --build'
            }
        }

        stage('Test') {
            steps {
                script {
                    sleep(10)

                  sh '''
    sudo curl -fsSL https://deb.nodesource.com/setup_18.x | sudo bash -
    sudo apt-get update
    sudo apt-get install -y nodejs
    sudo npm install -g selenium-side-runner
    selenium-side-runner -c "browserName=chrome" selenium_tests/login_test.side
'''

                }
            }
        }
    }
}
