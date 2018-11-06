#include <iostream>
#include<GL/gl.h>
#include <GL/glut.h>
using namespace std;

float _move = 0.0f;


float getX(int x)
{
    int width= glutGet(GLUT_WINDOW_WIDTH);
    return (float)x/width/2;
}

float getY(int y)
{
    int height=glutGet(GLUT_WINDOW_HEIGHT);
    return (float)y/height/2;
}

void drawScene() {

    glClear(GL_COLOR_BUFFER_BIT);
    glColor3d(1,1,0);
	glLoadIdentity();
	glMatrixMode(GL_MODELVIEW);

    glPushMatrix();
	glScalef(3.0, 3.0, 0);
	glTranslatef(_move, 0.0f, 0.0f);

    glBegin(GL_QUADS);
        glVertex3f(getX(-300),getY(100), 0.0f);
        glVertex3f(getX(-350),getY(50), 0.0f);
        glVertex3f(getX(-550),getY(50), 0.0f);
        glVertex3f(getX(-600),getY(100), 0.0f);
    glEnd();

    glBegin(GL_QUADS);
        glVertex3f(getX(-400),getY(100), 0.0f);
        glVertex3f(getX(-420),getY(100), 0.0f);
        glVertex3f(getX(-420),getY(200), 0.0f);
        glVertex3f(getX(-400),getY(200), 0.0f);
    glEnd();

    glBegin(GL_QUADS);
        glVertex3f(getX(-440),getY(100), 0.0f);
        glVertex3f(getX(-460),getY(100), 0.0f);
        glVertex3f(getX(-460),getY(200), 0.0f);
        glVertex3f(getX(-440),getY(200), 0.0f);
    glEnd();

    glBegin(GL_QUADS);
        glVertex3f(getX(-480),getY(100), 0.0f);
        glVertex3f(getX(-500),getY(100), 0.0f);
        glVertex3f(getX(-500),getY(200), 0.0f);
        glVertex3f(getX(-480),getY(200), 0.0f);
    glEnd();
    glPopMatrix();

	glutSwapBuffers();
}

void update(int value) {

    _move += .02;
    if(_move +0.3 > 1.0)
    {
        _move = -0.8;
    }
	glutPostRedisplay();

	glutTimerFunc(20, update, 0);
}

int main(int argc, char** argv) {
	glutInit(&argc, argv);
	glutInitDisplayMode(GLUT_DOUBLE | GLUT_RGB);
	glutInitWindowSize(800, 800);
	glutCreateWindow("Transformation");
	glutDisplayFunc(drawScene);
	glutTimerFunc(20, update, 0);
	glutMainLoop();
	return 0;
}
