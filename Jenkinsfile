pipeline {
    agent any

    stages {
           
      
        
        
        

        stage('Déploiement des services via Docker Compose') {
            steps {
                echo 'Service deployment with Docker Compose ....'
                sh 'docker-compose up -d '                
            }
        }

        stage('Test de l’application avec curl et navigateur web') {
            steps {
                echo 'Testing app with curl and web navigator ....'
                sh 'curl http://localhost:1111/ -I'
            }
        }

        stage('Tag des images Docker') {
            steps {
                echo 'Logging to Docker Hub ....'
                sh 'docker login -u moussakane -p Master2@2022'
                echo 'Tagging appli_webe ....'
                sh 'docker tag app_emp moussakane/app_emp:1.0'
                echo 'Taggingdb database ....'
                sh 'docker tag bdd_emp moussakane/bdd_emp:1.0'
            }
        }

        stage('Push des images Docker sur Docker Hub') {
            steps {
                echo 'Pushing the app to Docker Hub'
                sh 'docker push moussakane/app_emp:1.0'
                echo 'Pushing the database to Docker Hub'
                sh 'docker push moussakane/bdd_emp:1.0'
            }
        }
         

    }   
        
    }

