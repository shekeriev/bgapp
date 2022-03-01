pipeline {
  agent any
  stages {
    stage('Init') {
      parallel {
        stage('Init') {
          steps {
            echo 'First step will sleep for 60 sec'
            sleep 60
          }
        }

        stage('') {
          steps {
            echo 'This will execute in parallel'
          }
        }

      }
    }

    stage('Exec') {
      steps {
        sh 'hostname'
      }
    }

  }
}