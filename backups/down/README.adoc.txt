# SonarQuobe

## What is SonarQube

SonarQube is another tool for code analysis with a different approach: *continuous code quality*.
It provides centralized analysis with dashboards, charts, dynamic reports, filters and also administration management for custom rules, quality profiles, security and more.
SonarQube put in check projects code health, detecting bad smells, vulnerabilities, duplicated code, bugs and tests coverage, like Checkstyle, PMD, Findbugs and Jacoco, but SonarQube gives more than reports.

## Why SonarQube

Let's say that if we have to use a tool for check our code quality, let's use *ONE* tool centralizing the analysis and focus in the improvements.

Currently Checkstyle, PMD and Findbugs are present in the build.

In my opinion, we don't use the report of those tools, the main goal is always just skip many fool violations resulting in an empty report to achieve a successful build.

So again, *IF* we have to use a tool for this purpose, why don't we use a modern solution like *SonarQube* starting with *continuous code quality*?

We will can track many projects and branches in ONE tool, compare analysis with previous versions, filter results, check measures with charts and more then refactor our code to check again and continuouly.

Examples:


What was your first impressions? Let's use SonarQube or not?

## Installing SonarQube

Go to SonarQube website in https://www.sonarqube.org/downloads/ and download latest version.

To install, just unzip the file and run the shell script (or install as a SO service).

You can also custom default configs for host, port, context and database.

Default URL is http://localhost:9000.
Default Admin credentials are admin/admin.

This link contain more setup details: https://docs.sonarqube.org/display/SONAR/Installing+the+Server

## Continuous Integration

### Gradle plugin

To add a plugin in the `build.gradle` file is all we need to do:

```
plugins {
  id "org.sonarqube" version "2.6.1"
}
```

Then we have the task "sonarqube" to use in gradle, for example:

`$ gradlew sonaqube`

Of course, this only works for default configuration. If we custom the default configurations we need indicate the changes to the plugin.

### Jenkins plugin

Integrate SonarQube in the CI is a good idea.
Find *SonarQube Scanner for Jenkins* plugin and install it.
After that:

1. Manage Jenkins, in *Global Tool Configuration* page, add a *SonarQube Scanner* installation.
2. Manage Jenking, in *System Settings* page, configure *SonarQube servers* section. Don't forget to check the option for enable injection server configurations.

Finally in the job config, add the build step *Execute Sonar Scanner* and configure the values.
The task to run is `scan`.
Configure the properties `sonar.projectKey`, `sonar.sources` and `sonar.java.binaries` directly or using a properties in the project workspace.

The link for project in SonarQube will works after a successful build.

More details about the setup in https://docs.sonarqube.org/display/SCAN/Analyzing+with+SonarQube+Scanner+for+Jenkins

Have fun with SonarQube!

### Clean up

Did you like SonarQube? Do you think that SonarQube is efficient and would help us to improve our code health? 
If both answers are yes, remove the other plugins in `gradle.build` and save our time building backend projects.
