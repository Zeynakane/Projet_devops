pipeline {
    agent any

    stages {
        stage('version') {
            steps {
             
                  sh 'curl -L https://github.com/docker/compose/releases/download/1.25.3/run.sh -o /usr/local/bin/docker-compose'
                  sh 'chmod +x /usr/local/bin/docker-compose'
                
            }
        }
        stage('version') {
            steps {
             
                    sh '''
                    docker version
                    docker info
                    docker compose version
                    curl --version
                    jq --version
                    '''
                
            }
        }
        stage('docker donnees') {
            steps {
             
                    sh 'docker system prume -a --volumes -f'
                
            }
        }
    stage('start container') {
            steps {
             
                    sh 'docker compose up -d --no-color --wait'
                    sh 'docker compose ps'
                
            }
        }
    stage('run container') {
            steps {
             
                    sh 'curl http://localhost:7777/param?query=demo | jq'
                
            }
        }
   post {
     sh 'docker compose down --remove-orphans -v'
     sh 'docker compose ps'
   }
}
