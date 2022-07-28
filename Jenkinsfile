pipeline {
    agent any

    stages {
       
       
        stage('start container') {
            steps {
                   
                    sh 'echo jenkins | sudo -S docker-compose up  '
                    sh 'echo jenkins | sudo -S docker-compose ps'
                
            }
        }
        stage('run container') {
            steps {
             
                    sh 'curl http://localhost:7777/param?query=demo | jq'
                
            }
        }
       
    }
}
