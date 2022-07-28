pipeline {
    agent any

    stages {
       
       
        stage('start container') {
            steps {
             
                    sh 'docker compose up  '
                    sh 'docker compose ps'
                
            }
        }
        stage('run container') {
            steps {
             
                    sh 'curl http://localhost:7777/param?query=demo | jq'
                
            }
        }
       
    }
}
