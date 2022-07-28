pipeline {
    agent any

    stages {
       
       
        stage('start container') {
            steps {
                    sh 'sudo usermod -aG docker $USER'
                    sh 'sudo ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose'
                    sh 'sudo service docker restart'
                    sh 'docker-compose up  '
                    sh 'docker-compose ps'
                
            }
        }
        stage('run container') {
            steps {
             
                    sh 'curl http://localhost:7777/param?query=demo | jq'
                
            }
        }
       
    }
}
