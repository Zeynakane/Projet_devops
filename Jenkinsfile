pipeline {
    agent any

    stages {
        stage('Récupération du code sur la branche main') {
            
            steps {
                echo 'Clonage des repertoires'   
                sh 'git clone https://github.com/Zeynakane/Projet_devops.git'            
            }
        }
        
        
        

        stage('Déploiement des services via Docker Compose') {
            steps {
                echo 'Service deployment with Docker Compose ....'
                sh 'docker-compose up -d '                
            }
        }

        stage('Test de l’application avec curl et navigateur web') {
            steps {
                echo 'Testing app with curl and web navigator ....'
                sh 'curl http://localhost:5555/ -I'
            }
        }

        stage('Tag des images Docker') {
            steps {
                echo 'Logging to Docker Hub ....'
                sh 'docker login -u moussakane -p Master2@2022'
                echo 'Tagging appli_webe ....'
                sh 'docker tag appli_webe moussakane/appli_webe:1.0'
                echo 'Taggingdb database ....'
                sh 'docker tag bd_databases SsenUsername/bd_databases:1.0'
            }
        }

        stage('Push des images Docker sur Docker Hub') {
            steps {
                echo 'Pushing the app to Docker Hub'
                sh 'docker push moussakane/appli_webe:1.0'
                echo 'Pushing the database to Docker Hub'
                sh 'docker push moussakane/bd_databases:1.0'
            }
        }

    }   
        
    }

