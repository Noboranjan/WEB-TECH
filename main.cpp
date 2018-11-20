#include <GL/gl.h>
#include <GL/glu.h>
#include <GL/glut.h>
#include<stdio.h>
float camPosY = 0.0f;
float camPosX = 0.0f;
float camPosZ = 5.0f;
void init(void)
{
   glClearColor (0.0, 0.0, 0.0, 0.0);
   glShadeModel (GL_FLAT);
}
void update(int i)
{
    //gluLookAt(0,camPosy,0,0.0,0.0,0.0,0.0,0.0,0.0);
    glutPostRedisplay();
}
void specialKeys(int key, int x, int y) {
    switch (key) {
      case GLUT_KEY_UP:
          camPosY+=0.5f;
          printf("a");
          update(0);
          break;
      case GLUT_KEY_DOWN:
          camPosY-=0.5f;
          update(0);
          break;
    case GLUT_KEY_RIGHT:
          camPosX+=0.5f;
          printf("a");
          update(0);
          break;
    case GLUT_KEY_LEFT:
          camPosX-=0.5f;
          update(0);
          break;
    case GLUT_KEY_PAGE_UP:
          camPosZ+=0.5f;
          update(0);
          break;
    case GLUT_KEY_PAGE_DOWN:
          camPosZ-=0.5f;
          update(0);
          break;


}
}

void display(void)
{
   glClear (GL_COLOR_BUFFER_BIT);
   glColor3f (1.0, 1.0, 1.0);
   glLoadIdentity ();             /* clear the matrix */
           /* viewing transformation  */


   gluLookAt (camPosX, camPosY, camPosZ, 0.0, 0.0, 0.0, 0.0, 1.0, 0.0);
   //glScalef (1.0, 2.0, 1.0);      /* modeling transformation */
   //glutWireCube (2.0);






    //glVertex3f(0,-1,0);




















    glBegin(GL_QUADS);
        //X-Axis BLUE
        glColor3ub(0,120,255);
        glVertex3f(0,1,0);
        glVertex3f(0,0,0);
        glVertex3f(0,0,1);
        glVertex3f(0,1,1);
    glEnd();

    glBegin(GL_QUADS);
        //X-Axis PINK
        glColor3ub(255,0,255);
        glVertex3f(1,1,1);
        glVertex3f(1,0,1);
        glVertex3f(1,0,0);
        glVertex3f(1,1,0);

    glEnd();
    glBegin(GL_QUADS);
        //X-Axis GREEN
        glColor3ub(0,255,0);
        glVertex3f(0,0,0);
        glVertex3f(1,0,0);
        glVertex3f(1,0,1);
        glVertex3f(0,0,1);
    glEnd();
    glBegin(GL_QUADS);
        //X-Axis YELLOW
        glColor3ub(255,255,0);
        glVertex3f(0,1,1);
        glVertex3f(0,1,0);
        glVertex3f(1,1,0);
        glVertex3f(1,1,1);

    glEnd();

     glBegin(GL_QUADS);
        //X-Axis PURPLE
        glColor3ub(120,130,255);
        glVertex3f(1,1,1);
        glVertex3f(1,0,1);
        glVertex3f(0,0,1);
        glVertex3f(0,1,1);

    glEnd();
   glFlush ();
}

void reshape (int w, int h)
{
   glViewport (0, 0, (GLsizei) w, (GLsizei) h);
   glMatrixMode (GL_PROJECTION);
   glLoadIdentity ();
   glFrustum (-1.0, 1.0, -1.0, 1.0, 2.0, 20.0);
   glMatrixMode (GL_MODELVIEW);
}

int main(int argc, char** argv)
{
   glutInit(&argc, argv);
   glutInitDisplayMode (GLUT_SINGLE | GLUT_RGB);
   glutInitWindowSize (500, 500);
   glutInitWindowPosition (100, 100);
   glutCreateWindow (argv[0]);
   init ();
   glutDisplayFunc(display);
   glutReshapeFunc(reshape);
   glutSpecialFunc(specialKeys);
   glutMainLoop();
   return 0;
}
