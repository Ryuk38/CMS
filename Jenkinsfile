stage('Test') {
    steps {
        script {
            sleep(10)

            sh '''
                curl -fsSL https://deb.nodesource.com/setup_18.x | bash -
                apt-get install -y nodejs
                npm install -g selenium-side-runner
                selenium-side-runner -c "browserName=chrome" test4.side
            '''
        }
    }
}
