#include "ilivresystem.h"
#include "ui_ilivresystem.h"

IlivreSystem::IlivreSystem(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::IlivreSystem)
{
    ui->setupUi(this);
}

IlivreSystem::~IlivreSystem()
{
    delete ui;
}
