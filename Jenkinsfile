pipeline {
  agent any
  stages {
    stage('First Stage') {
      environment {
        test = '1'
      }
      steps {
        echo 'first step'
      }
    }
    stage('Next Stage') {
      steps {
        build 'testjob'
        echo 'test'
      }
    }
  }
}