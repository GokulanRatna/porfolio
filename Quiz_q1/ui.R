##QUIZQ1##
##UI##
library(shiny)
shinyUI(fluidPage( #fluid page for dynamically adapting to screens of different resolutions.
  titlePanel("Iris Dataset"),
  sidebarLayout( sidebarPanel(
    #
    radioButtons("p", "Select column of iris dataset:",
                 list("Sepal.Length"='a', "Sepal.Width"='b', "Petal.Length"='c', "Petal.Width"='d')),
    #
    sliderInput("bins",
                "Number of bins:",
                min = 1,
                max = 50,
                value = 30)
    # 
  ), mainPanel( plotOutput("distPlot") ) ) ))