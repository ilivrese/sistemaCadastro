#include "reg_user_dlg.h"
#include "ui_reg_user_dlg.h"

reg_user_dlg::reg_user_dlg(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::reg_user_dlg)
{
    ui->setupUi(this);
}

reg_user_dlg::~reg_user_dlg()
{
    delete ui;
}
