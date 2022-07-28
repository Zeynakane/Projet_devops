pipeline {
    agent {
        node {
            label 'agent1'
        }
    }

    stages {
        stage('Récupération du code sur la branche main') {
            
            steps {
                echo 'Clonage des repertoires'   
                sh 'git clone https://github.com/Zeynakane/Projet_devops.git'            
            }
        }
        
        
        stage('Build de l’image de l’application') {
            steps {
                echo 'Building the app image ....'
                sh 'docker build -f app.Dockerfile -t app_emp .'
            }
        }
        
        stage('Build de l’image de la base de donnée') {
            steps {
                echo 'Building the database image ....'
                sh 'docker build -f BDD.Dockerfile -t bd_emp .'
            }
        }

        stage('Déploiement des services via Docker Compose') {
            steps {
                echo 'Service deployment with Docker Compose ....'
                sh 'docker compose up -d'                
            }
        }

        stage('Test de l’application avec curl et navigateur web') {
            steps {
                echo 'Testing app with curl and web navigator ....'
                sh 'curl http://localhost:7777/ -I'
            }
        }

        stage('Tag des images Docker') {
            steps {
                echo 'Logging to Docker Hub ....'
                sh 'docker login -u moussakane -p Master2@2022'
                echo 'Tagging emp app ....'
                sh 'docker tag app_emp moussakane/app_emp:1.0'
                echo 'Tagging SsenProjet database ....'
                sh 'docker tag bd_SsenProjet SsenUsername/bd_SsenProjet:1.0'
            }
        }

        stage('Push des images Docker sur Docker Hub') {
            steps {
                echo 'Pushing the app to Docker Hub'
                sh 'docker push moussakane/app_emp:1.0'
                echo 'Pushing the database to Docker Hub'
                sh 'docker push moussakane/bd_emp:1.0'
            }
        }

    }   
        
    }

