pipeline {
    agent any

    stages {
       
       
        stage('start container') {
            steps {
             
                    sh 'docker-compose up -d --no-color --wait'
                    sh 'docker-compose ps'
                
            }
        }
        stage('run container') {
            steps {
             
                    sh 'curl http://localhost:7777/param?query=demo | jq'
                
            }
        }
        post {
            sh 'docker-compose down --remove-orphans -v'
              sh 'docker compose ps'
        }
    }
}
