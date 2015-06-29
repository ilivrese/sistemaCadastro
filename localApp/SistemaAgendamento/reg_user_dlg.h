#ifndef REG_USER_DLG_H
#define REG_USER_DLG_H

#include <QDialog>

namespace Ui {
class reg_user_dlg;
}

class reg_user_dlg : public QDialog
{
    Q_OBJECT

public:
    explicit reg_user_dlg(QWidget *parent = 0);
    ~reg_user_dlg();

private:
    Ui::reg_user_dlg *ui;
};

#endif // REG_USER_DLG_H
