pipeline {
    agent any

    stages {
       
       
        stage('start container') {
            steps {
                   
                    sh 'sudo -n docker-compose up  '
                    sh 'sudo -n docker-compose ps'
                
            }
        }
        stage('run container') {
            steps {
             
                    sh 'curl http://localhost:7777/param?query=demo | jq'
                
            }
        }
       
    }
}
