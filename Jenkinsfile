pipeline {
    agent any
    stages {
        stage('Clone') {
            steps {
                git branch: 'main', url: 'https://github.com/Ryuk38/cms-test.git'
            }
        }

        stage('Build CMS App Image') {
            steps {
                sh 'docker build -t my-cms-app .'
            }
        }

        stage('Run CMS App') {
            steps {
                sh 'docker-compose -f docker-compose.yml up -d --build'
            }
        }

        stage('Run Selenium Test') {
            steps {
                sh '''
                    docker build -f Dockerfile.selenium -t selenium-runner .
                    docker run --rm selenium-runner bash -c '
                        TEST_DIR=/tmp/profile-$RANDOM &&
                        mkdir -p $TEST_DIR &&
                        selenium-side-runner --chromeOptions.args="--user-data-dir=$TEST_DIR" selenium_tests/test4.side
                    '
                '''
            }
        }
    }
}
